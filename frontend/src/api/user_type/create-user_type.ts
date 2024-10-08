/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IUserType } from "../../interfaces/interfaces";

type IBody = Omit<IUserType, 'id'>;

export const createUserType = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/user_types`,
    body: JSON.stringify(formData),
  });
  return result;
};

