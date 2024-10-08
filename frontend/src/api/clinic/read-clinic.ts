/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IClinic } from "../../interfaces/interfaces";

type IBody = IClinic;

export const readClinic = async (): Promise<IBody[] | null> => {
  const result: IBody[] | null = await customFetch.get({
    url: `/clinics`,
  });
  return result;
};

