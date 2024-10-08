/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IAppointment } from "../../interfaces/interfaces";

type IBody = Omit<IAppointment, 'id'>;

export const createAppointment = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/appointments`,
    body: JSON.stringify(formData),
  });
  return result;
};

